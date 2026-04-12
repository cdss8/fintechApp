window.onload = function() {
    Vue.createApp({
        data() {
            return {
                cuenta: {
                    field_balance: "999,999.00",
                    field_iban: "ES12 3456 7890 0000 0000",
                    field_account_type: "Cuenta de Prueba Local"
                },
                cuentadrupal: null,
                error: null,
                showTransfer: false,
                transferAmount: null,
                destination: '',
                limits: null,
                showLimits: false,
                showLoans: false // Añadido para evitar errores
            }
        },
        mounted() {
            this.fetchLimits();
            this.fetchAccount();
        },
        methods: {
            async fetchAccount() {
                const drupalUrl = 'http://fintechapp.ddev.site/jsonapi/account';
                try {
                    const response = await fetch(drupalUrl);
                    if (!response.ok) throw new Error("Cant connect with Drupal");
                    const json = await response.json();
                    if (json.data && json.data.length > 0) {
                        this.cuentadrupal = json.data[0].attributes;
                    }
                } catch (err) {
                    this.error = "CORS, or connection errors";
                }
            },

            async fetchLimits() {
                const limitsUrl = 'http://fintechapp.ddev.site/jsonapi/limits_alerts';
                try {
                    const response = await fetch(limitsUrl);
                    const json = await response.json();
                    if (json.data && json.data.length > 0) {
                        this.limits = json.data[0].attributes;
                        console.log("Limits received", this.limits);
                    }
                } catch (err) {
                    console.error("Error fetching limits:", err);
                }
            },

            async makeTransfer() {
                if (!this.transferAmount || this.transferAmount <= 0) return alert("Invalid amount");
                
                try {
                    const response = await fetch('http://localhost:1080/process-transfer', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({
                            amount: this.transferAmount,
                            destination: this.destination,
                            originAccount: this.cuentadrupal.field_iban
                        })
                    });

                    const result = await response.json();

                    if (result.success) {
                        
                        // Updfating the Ui if ducess
                        this.cuentadrupal.field_balance -= this.transferAmount;
                        this.showTransfer = false;
                        alert(`Success! ID: ${result.transactionId}`);
                    } else {
                        alert("Error: " + result.message);
                    }
                } catch (err) {
                    alert("Could not connect to the Fastify backend");
                }

                console.log(`Enviando ${this.transferAmount} a ${this.destination}`);
                
                if (this.cuentadrupal) {
                    this.cuentadrupal.field_balance -= this.transferAmount;
                    this.showTransfer = false;
                    this.transferAmount = null;
                    this.destination = '';
                    alert("¡Transferencia realizada con éxito!");
                }
            }
        }
    }).mount('#app');
};
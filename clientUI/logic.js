window.onload = function(){
Vue.createApp({
    data() {
        return {
            cuenta: {
                field_balance: "999,999.00",
                field_iban: "ES12 3456 7890 0000 0000",
                field_account_type: "Cuenta de Prueba Local"
            },

            cuentadrupal: null,
            error: null
        }
    },
    mounted() {
            const drupalUrl = 'http://fintechapp.ddev.site/jsonapi/account';

            console.log("Conecting to Drupal at:", drupalUrl);
            fetch(drupalUrl)
                .then(response => {
                    if (!response.ok) throw new Error("Cant connet with Drupal");
                    return response.json();
                })
                .then(json => {
                    //Drupal stores at data[0].attributes
                    if (json.data && json.data.length > 0) {
                        this.cuentadrupal = json.data[0].attributes;
                        console.log("Drupal data received", this.cuentadrupal);
                    } else {
                        this.error = "Didnt found bank accounts";
                    }
                })
                .catch(err => {
                    console.error("Error:", err);
                    this.error = "CORS, or conection errors";
                });
        }
    }).mount('#app');
};
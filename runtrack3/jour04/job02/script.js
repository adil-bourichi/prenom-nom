function jsonValueKey(jsonString, key) {
    try {

        const jsonObject = JSON.parse(jsonString);


        if (key in jsonObject) {

            return jsonObject[key];
        } else {

            return null;
        }
    } catch (error) {

        console.error("Erreur lors de l'analyse du JSON : ", error);
        return null;
    }
}

const jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
}`;

const keyToFind = "city";
const value = jsonValueKey(jsonString, keyToFind);

console.log(value); 

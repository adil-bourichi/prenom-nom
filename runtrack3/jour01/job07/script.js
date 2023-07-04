function jourtravaille(date) {
  var jour = date.getDate();
  var mois = date.getMonth() + 1;
  var annee = date.getFullYear();

  var jourSemaine = date.getDay();

  // Vérifier si c'est un jour férié en 2020
  var joursFeries2020 = [
    "2020-01-01", "2020-04-10", "2020-04-13", "2020-05-01", "2020-05-08",
    "2020-05-21", "2020-06-01", "2020-07-14", "2020-08-15", "2020-11-01",
    "2020-11-11", "2020-12-25"
  ];

  var dateFormatted = date.toISOString().split('T')[0];
  if (joursFeries2020.includes(dateFormatted)) {
    console.log("Le " + jour + " " + mois + " " + annee + " est un jour férié");
  } else if (jourSemaine === 0 || jourSemaine === 6) {
    console.log("Non, " + jour + " " + mois + " " + annee + " est un week-end");
  } else {
    console.log("Oui, " + jour + " " + mois + " " + annee + " est un jour travaillé");
  }
}

var dateExemple = new Date("2020-12-25");
jourtravaille(dateExemple);

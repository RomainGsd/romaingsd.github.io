var nb = parseInt(prompt("Entrez un nombre entre zéro et 999 : "));
var u_arr = ["un", "deux", "trois", "quatre", "cinq", "six", "sept", "huit", "neuf"],
    d_arr = ["dix", "vingt", "trente", "quarante", "cinquante", "soixante",
              "soixante-dix", "quatre-vingts", "quatre-vingts-dix"],
    c_arr = ["cent", "cents"], str_arr = [];

function convert(nb) {
  var u, d, c, str = '';

  u = d = c = 0;
  u = nb % 10;
  if (u == 0){
    str = "zéro";
  } else {
    d = ((nb % 100) - u) / 10;
    c = ((nb % 1000) - (u + (d * 10))) / 100;
    if (c != 0){
      str_arr[0] = c > 1 ? (u_arr[c - 1] + '-' + c_arr[1]) : c_arr[0];
    }
    str_arr[1] = d_arr[d - 1];
    str_arr[2] = u_arr[u - 1];
    str = str_arr.join('-');
  }
    alert("nb : " + nb + "\nstr : " + str);
}

if ((typeof nb === "number") && (nb > 999 || nb < 0)) {
  alert("Ce nombre n'est pas compris en 0 et 999");
} else if (isNaN(nb)) {
  alert("Ce n'est pas un nombre");
} else {
  convert(nb);
}

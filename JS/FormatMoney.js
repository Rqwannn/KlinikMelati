/* eslint-disable no-unused-vars */
let separator;

// * FormatMoney Class
class FormatMoney {
  toRupiah(bilangan) {
    let number_string = bilangan.toString(),
      sisa = number_string.length % 3,
      rupiah = number_string.substr(0, sisa),
      ribuan = number_string.substr(sisa).match(/\d{3}/g);

    if (ribuan) {
      separator = sisa ? "." : "";
      rupiah += separator + ribuan.join(".");
      return `IDR. ${rupiah}`;
    }
  }
}
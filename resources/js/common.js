// 改行の関数
const nl2br = (str) => {
  var str = str.replace(/\r\n/g, "<br>");
  str = str.replace(/(\n|\r)/g, "<br>");
  return str;
}

// 今日の日付を取得する関数
const getToday = () => {
  const today = new Date();
  const yyyy = today.getFullYear();
  const mm = ("0" + (today.getMonth()+1)).slice(-2);
  const dd = ("0" + (today.getDate())).slice(-2);

  return yyyy + '-' + mm + '-' + dd;
}

export { nl2br, getToday }
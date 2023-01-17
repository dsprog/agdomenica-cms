function mostrar(id) {
  if (document.getElementById(id).style.display !== "none") {
    document.getElementById(id).style.display = "none";
  }
  Array.from(document.getElementsByClassName("CloseProd")).forEach(
    div => (div.style.display = "none")
  );
  document.getElementById(id).style.display = "block";
  return false;
}

function info(id) {
    if (document.getElementById(id).style.display !== "none") {
      document.getElementById(id).style.display = "none";
    }
    Array.from(document.getElementsByClassName("CloseInfo")).forEach(
      div => (div.style.display = "none")
    );
    document.getElementById(id).style.display = "block";
    return false;
  }

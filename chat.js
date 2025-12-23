
function sendMsg() {
  let msgInput = document.getElementById("msg");
  let msg = msgInput.value.trim(); // spaces remove
  let error = document.getElementById("error");

  // Empty message check
  if (msg === "") {
    error.innerText = "⚠️ Message field is empty";
    error.style.display = "block";
    return; // send stop
  }

  // Error message clear
  error.style.display = "none";

  fetch("send.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "msg=" + encodeURIComponent(msg)
  })
  .then(() => {
    loadMsg();          // messages reload
    msgInput.value = ""; // input clear
  });
}


// load message in chat box

function loadMsg(){
 fetch("fetch.php")
 .then(r=>r.text())
 .then(d=>document.getElementById("messages").innerHTML=d);
}

setInterval(loadMsg,1000);





// send message 
/*
function sendMsg(){
 let msg=document.getElementById("msg").value;
 
 fetch("send.php",{
  method:"POST",
  headers:{'Content-Type':'application/x-www-form-urlencoded'},
  body:"msg="+encodeURIComponent(msg)
 }).then(()=>loadMsg());
 document.getElementById("msg").value="";
}
*/











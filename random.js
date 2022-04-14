function rand(len){
  return Math.floor(Math.random() * Math.pow(5, len));
}

function setRand(){
   document.getElementById('rand').value = rand(5); 
}
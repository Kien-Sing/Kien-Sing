function updatemenu() {
    if (document.getElementById('responsive-menu').checked == true) {
      document.getElementById('menu').style.borderBottomRightRadius = '0';
      document.getElementById('menu').style.borderBottomLeftRadius = '0';
    }else{
      document.getElementById('menu').style.borderRadius = '10px';
    }
  }
  
  document.getElementById('recentTab').ondragstart = function() { return false; };
  document.getElementById('favoTab').ondragstart = function() { return false; };
  document.getElementById('acteurTab').ondragstart = function() { return false; };
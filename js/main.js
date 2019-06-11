

function _(el){
	return document.getElementById(el);
}

function ajax_data(php_file,el,send_data){
	_(el).innerHTML="Loading";

	var hr=new XMLHttpRequest();
	hr.open('POST',php_file,true);
	hr.setRequestGeader('Content-type','application/x-www-form-urlencoded');
	hr.onreadystatechange = function(){ 

      if(hr.readyState === 4 && hr.status === 200){
         _(el).innerHTML =hr.responseText;
      }
	};
	hr.send(send_data);
}

function contact_page(){
    ajax_data('contact.php','pages',null);  
}
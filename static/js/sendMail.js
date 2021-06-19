function send_mail(e){
	e.setAttribute("disabled", true)
    let data =new FormData()
    data.append("name", document.getElementById("name_txt").value)
    data.append("email", document.getElementById("email_txt").value)
    data.append("service", document.getElementById("service_option").value)
    data.append("message", document.getElementById("msg_txt").value)
    fetch("/mail.php", {
        method: 'POST',
        body: data,
        mode: 'no-cors',
        headers:{
        	// "Accept":"application/json",
        	// "Content-Type":"application/json"
        }
    })
    .then(res=>res.json())
    .then(res=>{
    	console.log(res)
    	e.removeAttribute("disabled")
        let title = "Thanks"
        if(res.status !== 200){
            title = "Error"
        }
        $("#contact_modal .modal-title").text(title)
        $("#contact_modal #contact_msg_body").text(res["msg"])
        $("#contact_modal").modal("show")
    })
    .catch(err=>{
    	e.removeAttribute("disabled")
        console.log("Some error occured while sending mail!")
        console.log(err)
    });

   return false;
}
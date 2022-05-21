// function sendMail(params) {
//     var tempParams = {
//         from_name: document.getElementById("customer_name").value,
//         email_to: document.getElementById("customer_email").value,
//     };

//     emailjs.send('email','template_d1f0v5f',tempParams)
//    .then(function(res){
//        console.log("success",res.status);
//    })
// }

function send()
{
    emailjs.send("email","template_d1f0v5f",{
        from_name: document.querySelector("#customer_name"),
        email_to: document.querySelector("#customer_email"),
        to_name: document.querySelector("#customer_name"),
        }).then(response=>{
            console.log("success" , response.status);
        },(error)=>{
            console.log("error");
        })
}
document.querySelector(".send").addEventListener("click",send)
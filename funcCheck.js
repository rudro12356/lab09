// function Page()
// {
//     alert("Inside ToyStore page.");

//     return true;
// }

function checkform()
{   

    //alert("hello")

    let Toy1=document.getElementById('Toy1');
    let Toy2=document.getElementById('Toy2');
    let Toy3=document.getElementById('Toy3');
    let Toy4=document.getElementById('Toy4');
    let Toy5=document.getElementById('Toy5');

    let ship1=document.getElementById('7days');
    let ship2=document.getElementById('overnight');
    let ship3=document.getElementById('nexthr');

    let username=document.getElementById('onlineid');
    let password=document.getElementById('passcode');
    
    if(Toy1.value.length == 0 || Toy2.value.length == 0 || Toy3.value.length == 0 || Toy4.value.length == 0 || Toy5.value.length == 0)  
    {
        alert("Input # of toys.");
        return(false);
    }

    if(!ship1.checked && !ship2.checked && !ship3.checked){
        alert("Select a shipping method.");
        return(false);
    }

    if(username.value.length == 0 )
    {
        alert("Please enter username.");
        
        return false;
    }

    if(password.value.length == 0 )
    {
        alert("Please enter the password.");
        
        return false;
    }



    





    return true;



}

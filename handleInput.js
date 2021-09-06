
const showPassword = document.querySelector(".input-pwd .show-password");
showPassword.addEventListener("click", handleShowPassword);

function handleShowPassword(event)
{
    const showPassword = event.target;
    const input = showPassword.closest(".input-pwd").querySelector("input");

    if(showPassword.classList.contains("eye"))
    {
        input.type = "password";
        showPassword.classList.remove("eye");
        showPassword.classList.add("eye-closed");
    } else {
        input.type = "text";
        showPassword.classList.add("eye");
        showPassword.classList.remove("eye-closed");
    }
}
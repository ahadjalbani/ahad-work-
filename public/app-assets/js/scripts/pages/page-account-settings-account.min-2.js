$((function(){var t=$(".validate-form"),e=$("#account-upload-img"),n=$("#account-upload"),c=$(".uploadedAvatar"),o=$("#account-reset"),a=$(".account-number-mask"),i=$(".account-zip-code"),u=$(".select2"),r=document.querySelector("#formAccountDeactivation"),l=r.querySelector(".deactivate-account");if(c){var s=c.attr("src");n.on("change",(function(t){var n=new FileReader,c=t.target.files;n.onload=function(){e&&e.attr("src",n.result)},n.readAsDataURL(c[0])})),o.on("click",(function(){c.attr("src",s)}))}t.length&&t.each((function(){var t=$(this);t.validate({rules:{firstName:{required:!0},lastName:{required:!0},accountActivation:{required:!0}}}),t.on("submit",(function(t){t.preventDefault()}))})),r&&$(document).on("click","#accountActivation",(function(){1==d.checked?l.removeAttribute("disabled"):l.setAttribute("disabled","disabled")}));const d=document.querySelector("#accountActivation");l&&(l.onclick=function(){1==d.checked&&Swal.fire({text:"Are you sure you would like to deactivate your account?",icon:"warning",showCancelButton:!0,confirmButtonText:"Yes",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-outline-danger ms-2"},buttonsStyling:!1}).then((function(t){t.value?Swal.fire({icon:"success",title:"Deleted!",text:"Your file has been deleted.",customClass:{confirmButton:"btn btn-success"}}):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"Deactivation Cancelled!!",icon:"error",customClass:{confirmButton:"btn btn-success"}})}))}),a.length&&a.each((function(){new Cleave($(this),{phone:!0,phoneRegionCode:"US"})})),i.length&&i.each((function(){new Cleave($(this),{delimiter:"",numeral:!0})})),u.length&&u.each((function(){var t=$(this);t.wrap('<div class="position-relative"></div>'),t.select2({dropdownParent:t.parent()})}))}));
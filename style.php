<style type="text/css">
	
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Merienda One', cursive;
	}

	html{
	scroll-behavior: smooth;
}
.row{
	margin-left: : 0!important;
	margin-right: : 0!important;
}

.main{
 background-color: #173796;
 height: 100%;
}

.form_style{
	box-shadow: 20px 20px 20px 5px rgba(0, 0, 0, 0.3);
	background-color: #fff;
}
/*/////////////Details_Section////////////////////*/
.contact_img{
	background-color: #070e28;
	box-shadow: drop-shadow(20px 20px 20px 5px rgba(0, 0, 0, 0.3));
	
	clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 0 50%, 0% 0%);
}

/*//////////////////FORM STYLE//////////////////////*/
/*.form_animt{
	background-color: #007aff;
}*/

input[type=text] {
 border: none;
  border-bottom: 2px solid #007aff;
}

input[type=date] {
 border: none;
  border-bottom: 2px solid #007aff;
}

input[type=number] {
 border: none;
  border-bottom: 2px solid #007aff;
}

input[type=file] {
 border: none;
  border-bottom: 2px solid #007aff;
}

input[type=email] {
 border: none;
  border-bottom: 2px solid #007aff;
}






/*////////////Submit Button///////////////////////////*/

.button{
	position: relative;
	padding: 10px;
    font-size: 17px;
    text-decoration: none;
    color: black;
    background: #007aff;
    letter-spacing: 1px;
    border: 1px solid  #007aff;
    transition: 0.5s;
    overflow: hidden;
    border-radius: 5px;
    font-family: 'Cinzel', serif;
}

.button::before{
	content: '';
	position: absolute;
	top: 0;
	left: -100%;
	width: 100%;
	height: 100%;
	background: linear-gradient(90deg,transparent,#fff,transparent);
	transition: 0.5s;
}

.button:hover{
	background: #007aff;
	box-shadow: 20px 20px 20px 5px rgba(0, 0, 0, 0.3);
}

.button:hover::before{
	left: 100%;
}

@media(max-width: 768px){
	.contact_img{
	background-color: #070e28;
	box-shadow: 20px 20px 20px 5px rgba(0, 0, 0, 0.3);
	
	clip-path: polygon(0% 0%, 100% 0%, 99% 85%, 73% 85%, 75% 100%, 50% 85%, 0 85%);
}
}
</style>
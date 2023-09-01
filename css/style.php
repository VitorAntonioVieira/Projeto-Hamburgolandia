<?php header('Content-type: text/css'); ?>

body {
    margin: 0;
    padding: 0;
}

nav {
    display: flex;
    background: #F4EADC;
    padding: 20px;
    align-items: center;
}

.logo img {
    margin-left: 40px;
    max-height: 80px;
    vertical-align: middle;
}

.hambu {
    color: #e47f21;
    margin-left: 60px;
    max-height: 80px;
    vertical-align: middle;
}

.hambu {
    color: #5e4242;
    margin-left: 20px;
    font-family: 'Medula One', cursive;
    letter-spacing: 20px;
    font-size: 20px;
}

body {
    font-family: sans-serif;
}

fieldset {
    border: 3px solid;
    width: 400px;
    margin: auto;
    border-radius: 20px;
    margin-top: 90px;
    border-color: #FFB67B;

}

.login {
    height: auto;
    margin: 0 auto;
    padding: 10px;
    display: flex;
    flex-direction: column;


}

.label-float {
    position: relative;
    padding-top: 13px;
    margin: auto;
    display: flex;
}

input {
    border: 1px solid lightgrey;
    border-radius: 5px;
    outline: none;
    height: 10px;
    min-width: 250px;
    padding: 15px 20px;
    font-size: 16px;
    font-weight: bold;
    transition: all .1s linear;
    -webkit-transition: all .1s linear;
    -moz-transition: all .1s linear;
    -webkit-appearance: none;


}

.label-float input:focus {
    border: 2px solid #FFB67B;
}

.label-float input::placeholder {
    color: transparent;
}

.label-float label {
    pointer-events: none;
    position: absolute;
    top: calc(50% - 8px);
    left: 15px;
    transition: all .1s linear;
    -webkit-transition: all .1s linear;
    -moz-transition: all .1s linear;
    background-color: white;
    padding: 5px;
    box-sizing: border-box;
    color: #5e4242;
}

.label-float input:required:invalid+label {
    color: #5e4242;
}

.label-float input:focus:required:invalid {
    border: 2px solid #FFB67B;
}

.label-float input:focus+label,
.label-float input:not(:placeholder-shown)+label {
    font-size: 13px;
    font-weight: bold;
    top: 0;
    color: #5e4242;
}

#h2login {
    color: #5e4242;
}

#botaologin {
    position: relative;
    top: 40%;
    left: 37%;
    margin-top: 20px;
    background-color: #00D128;
    border-radius: 30px;
    border: #fff;
    color: #fff;
    height: 40px;
    width: 90px;
    font-weight: bold;

}

select option[value="cacapava"],
select option[value="taubate"],
select option[value="sanja"],
select option[value="lagoinha"] {
    background: rgba(225, 131, 16, 0.103);
}

#filial {
    border: 1px solid lightgrey;
    border-radius: 5px;
    height: 30px;
    padding: 15px 20px;
    font-size: 16px;
    font-weight: bold;
    width: 290px;
    transition: all .1s linear;
    -webkit-transition: all .1s linear;
    -moz-transition: all .1s linear;
    -webkit-appearance: none;
}

.footer {
    margin-top: 90px;
    background-image: url("FOOTER.jpg");
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 30px 0;
}
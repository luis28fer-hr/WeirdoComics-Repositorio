<style>

main .form {
    margin: 0 auto;
    margin-top: 25px;
    padding: 0 0 30px 0 ;
    background-color: #F8F9F9;
    border-radius: 10px;
    width: 68%;
    box-shadow: 0 0.1rem 0.7rem rgba(0,0,0,.3);

}
main .form #encabezado {
    width: 100%;
    height: 35px;
    text-align: center;
    background-color: #D6DBDF;
    border-radius: 10px 10px 0 0;
}
main .form #encabezado #titulo {
    padding: 8px;
    font-weight: 800;
    font-size: 16px;
    letter-spacing: 1px;

}
main .form .container{
    display: flex;
    justify-content: center;
}
main .form .formulario {
    width: 50%;
    padding: 15px 15px;
    font-size: 18px;
}
main .form .formulario2 {
    width: 50%;
    padding: 15px 15px;
    font-size: 18px;
}
main .form .botones {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 15px;
}
main .form .botones a  {
    display: flex;
    width: 48%;
    height: 38px;
    border-radius: 13px;
    background-color: #99A3A4;
    align-items: center;
    justify-content: center;

}
main .form .botones a button {
    font-family: 'Montserrat', sans-serif;
    text-decoration: none;
    border-style: none;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1.5px;
    background-color: rgba(166, 172, 175 , 0);
    color: #FFFFFF;
    cursor: pointer;
}

main .form .botones #guardar {
    background-color: #48C9B0;
}
main .form .botones #guardar:hover {
    background-color: #16A085;
}

main .form .botones a:hover {
    background-color: #808B96;
}



main .form .formulario div{
    display: flex;
    margin-bottom: 10px;

}
main .form .formulario2 div{
    display: flex;
    margin-bottom: 10px;
}


main .form form p{
    display: inline-block;
    font-size: 14px;
    letter-spacing: -1px
    text-decoration: none;
    width: 30%;
    height: 40px;
    padding: 12px 0;
    font-weight: 600;
}

main .form form input, select{
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 1px;
    border: 0;
    width: 80%;
    height: 40px;
    padding: 0 1rem 0 1rem;
    color: #202d3c;
    border-radius: 3px;
}

main .form form select{
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 1px;
    width: 80%;
    height: 40px;
    padding: 0 1 rem 0 1rem;
    color: #202d3c;
    border-radius: 3px;
    outline: none;
}
main .form form select option{
    height: 30px;
}

main .form form input:hover, select:hover{
    border-bottom: 3px solid rgba(46, 46, 49, 0.3);
    padding-top: 3px;
    box-shadow: 0 2px 10px 1px rgba(10, 10, 100, 0.1);
}
main .form form input:focus, select:focus{
    outline: none;
    border-bottom: 3px solid rgba(46, 46, 49, 0.3);
    padding-top: 3px;
    box-shadow: 0 2px 10px 1px rgba(10, 10, 100, 0.1);
}



</style>

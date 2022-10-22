<style>
main{
    height: 45em ;
    padding: 5rem 3% 0 3%;
}

/* caja de links y opcines*/

main section {
    display: inline-block;
    height: 110px;
}

main #usuarios{
    visibility: visible;
}

main #ventas{
    margin-left: 8em;
    visibility: hidden;
}
main #usuarios p{
    text-align: center;
    font-weight: 600;
    letter-spacing: 0.5px;
    padding-bottom: 3px;
}
main #usuarios ul {
    display: flex;
    list-style: none;
}


main #usuarios ul li{
    display: flex;
}

main #usuarios ul li a{
    display: block;
    width: 90px;
    height: 87px;
    background-color: #F8F9F9;
    border-radius: 10px;
    margin-right: 30px;
    text-align: center;
    box-shadow: 0 0.1rem 0.5rem rgba(0,0,0,.3);
    transition: all 0.3s ease 0s;
}

/*Boton agregar*/

main #usuarios ul li #nuevo i{
    color: #58D68D;
    font-size: 40px;
    padding-top: 10px;

}
main #usuarios ul li #nuevo button{
    margin-top: 11px;
    font-family: 'Montserrat', sans-serif;
    width: 90px;
    padding: 5px;
    border-style: none;
    border-end-end-radius: 10px;
    border-end-start-radius: 10px;
    cursor: pointer;
    background-color: #58D68D;
    color: #FFFFFF;
    font-weight: 600;
}

main #usuarios ul li #nuevo:hover{
    outline: 5px solid  #58D68D;
}

.agregar_Activa {
    outline: 5px solid  #58D68D;
}

/*Boton consultar*/

main #usuarios ul li #consultar i{
    color: #5DADE2;
    font-size: 40px;
    padding-top: 10px;
}

main #usuarios ul li #consultar button{
    margin-top: 11px;
    font-family: 'Montserrat', sans-serif;
    width: 90px;
    padding: 5px;
    border-style: none;
    border-end-end-radius: 10px;
    border-end-start-radius: 10px;
    cursor: pointer;
    background-color: #5DADE2;
    color: #FFFFFF;
    font-weight: 600;
}

main #usuarios ul li #consultar:hover{
    outline: 5px solid  #5DADE2;
}

.consultar_Activa {
    outline: 5px solid  #5DADE2;
}



/*Boton repprte*/
main #usuarios ul li #reporte{
    margin-right: 0;
}

main #usuarios ul li #reporte i{
    color: #EC7063;
    font-size: 40px;
    padding-top: 10px;
}

main #usuarios ul li #reporte button{
    margin-top: 11px;
    font-family: 'Montserrat', sans-serif;
    width: 90px;
    padding: 5px;
    border-style: none;
    border-end-end-radius: 10px;
    border-end-start-radius: 10px;
    cursor: pointer;
    background-color: #EC7063;
    color: #FFFFFF;
    font-weight: 600;
}

main #usuarios ul li #reporte:hover{
    outline: 5px solid  #EC7063;
}

.reporte_Activa {
    outline: 5px solid  #EC7063;
}

main #usuarios div form{
    display: flex;
    padding: 1rem 0;
}

main #usuarios div form input{
    width: 100%;
    height: 2.2rem;
    border: none;
    border-radius: 8px 0 0 8px;
    padding: 0 12px;
    letter-spacing: 1px;
    color: #212F3D;
    transition: box-shadow 0.3s ease 0s;
}

main #usuarios div form button{
    background-color: #5DADE2;
    border: none;
    padding: 0 1rem;
    margin: 0 -2px;
    color: white;
    font-size: 18px;
    border-radius: 0 8px 8px 0;
    transition: all 0.3s ease 0s;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}


main #usuarios div form input:hover{
    border-top: 4px solid #5DADE2;
    border-bottom: 4px solid #5DADE2;
    border-left: 4px solid #5DADE2;
    box-shadow: 0 0 18px 2px rgba(66, 189, 237, .3);
    padding-left: 8px;
}

main #usuarios div form input:focus{
    outline: none;
    border-top: 4px solid #5DADE2;
    border-bottom: 4px solid #5DADE2;
    border-left: 4px solid #5DADE2;
    box-shadow: 0 0 18px 2px rgba(66, 189, 237, .3);
    padding-left: 8px;
}

main #usuarios div form button:hover{
    font-size: 19px;
}

.buscar_no_visivle{
    position: absolute;
    z-index: -1;
    visibility: hidden;
}

.buscar_visible{
    visibility: visible;
}



</style>

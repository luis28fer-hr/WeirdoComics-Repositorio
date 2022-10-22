<style>

    main .tabla{
        margin-top: 25px;
        display: block;
        height: 25rem;
    }

    main .tabla table{
        margin: 0 auto;
        width: 100%;
        border-radius: .5rem;
        border-collapse: collapse;
        background-color: rgba(245, 245, 245, 1);
        box-shadow: 0 3px 8px 5px rgba(2, 36, 59, 0.1);
        overflow: hidden;
    }
    main .tabla table .uno th{
        background-color: rgba(84, 153, 199, .8);
        font-family: 'Montserrat', sans-serif;
        padding: .8rem .5rem;
        font-weight: 800;
        text-align: left;
        font-size: 15px;
        letter-spacing: 1px;
        cursor:auto;
    }

    main .tabla table td{
        font-family: 'Montserrat', sans-serif;
        padding: .7rem .5rem;
        font-weight: 400;
        text-align: left;
        font-size: 15px
    }


    main .tabla table tr td:first-child{
        font-weight: 600;
    }
    main .tabla table a .editar{
        color: #F39C12;
        font-size: 20px;
        transition: all 0.3s ease;
    }
    main .tabla table a .editar:hover{
        color: #CA6F1E;
        transform: translateY(-2px);
        box-shadow: 0 1px 5px 0px #1209010c;
    }

    main .tabla table a .eliminar{
        color: #E74C3C;
        font-size: 18px;
        transition: all 0.3s ease;
    }
    main .tabla table a .eliminar:hover{
        color: #B03A2E;
        transform: translateY(-2px);
        box-shadow: 0 1px 5px 0px #1209010c;
    }

    main .tabla table tr a{
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    main .tabla table tr{
        transition: all .3s ease;
    }

    main .tabla table tr:nth-child(odd){
        background-color: rgba(230, 230, 230, 1);
    }
    main .tabla table tr:hover{
        background-color: rgba(127, 179, 213, .5);
        cursor: pointer;
    }


</style>

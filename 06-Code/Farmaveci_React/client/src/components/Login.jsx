import React, { Fragment} from 'react';
import Marquee from "react-fast-marquee";
import {  FormGroup, FormControl, Input, InputLabel, styled, Typography, Button } from '@mui/material';
import logo from '../images/img1.jpg';
import '../css/styleLogin.css';



const ContainerS = styled(FormGroup)`
    width: 70%;
    display: grid;
    justify-content: center;
    grid-template-areas: "img InputCentered1"
                         "img InputCentered1"
                         "img Button";
    column-gap: 10%;
    margin: 5% auto 0 auto;
    background-color: white;
    margin-bottom: 10%;
    box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
    margin-top: 10%;
    & > div { 
        margin-top: 5%;   
    }
`;
const InputCentered = styled(Input)`
    grid-area: InputCentered1;
 
`;
const InputLabelCentered = styled(InputLabel)`
 
`;
const ButtonLogIn = styled(Button)`
    grid-area: Button;
    max-width: 100%;
    height: auto;
`;

export default function Login() {
    return (
        <Fragment>
            <Marquee speed={70} gradientColor={[]}><Typography variant="h4">FARMAVECI</Typography></Marquee>
            <ContainerS>
                <img src={logo} alt="logo"></img>
                <FormControl>
                    <InputLabelCentered> Usuario: </InputLabelCentered>
                    <InputCentered name="username" />
                </FormControl>
                <FormControl>
                    <InputLabelCentered> Contraseña: </InputLabelCentered>
                    <InputCentered name="password" type='password' />
                </FormControl>
                <FormControl>
                    
                        <ButtonLogIn  onClick={() =>{ const boll = true; if(boll===true){window.location= '/all'}}} variant='contained'>
                           Iniciar Sesion
                        </ButtonLogIn>
                </FormControl>
            </ContainerS>
            
        </Fragment>

    );
}

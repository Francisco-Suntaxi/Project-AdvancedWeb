import React, { Fragment }  from 'react'
import {Box, Container,styled,FormGroup,Typography, FormControl, FormLabel, Input, Select,MenuItem,Button} from '@mui/material'
import SaveIcon from '@mui/icons-material/Save';
import NavBar from './NavBar';

const ContainerS = styled(FormGroup)`
    width: 30%;
    justify-content: center;
    margin: 5% auto 0 auto;
    background-color: white;
    box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
    margin-top: 5%;
    & > div { 
        margin-top: 3%;   
    }
    align-items: center;
`;
const ButtonStyled = styled(Button)`
`;
const SelectStyled = styled(Select)`
    width: 70%;
`;

const Title4 = styled(Typography)`   
    text-align: center;
    font-weight: bold;
`;

const LabelStyled = styled(FormLabel)`
    font-weight: bold;

`;
export default function FormAddM(){
    return (
        <Fragment>
            <NavBar />
            <ContainerS>
            <Box>
                <Container>
                    <Title4 variant="h4">Agregar Medicina</Title4>
                    <FormControl>
                        <div>    
                            <LabelStyled className=''>Codigo: </LabelStyled>
                            <Input  type='number' name='IdMedicine' id='IdMedicine' className=''></Input>
                        </div>
                        <div>    
                            <LabelStyled className=''>Medicina: </LabelStyled>
                            <Input  type='text' name='nameMedicine' id='nameMedicine' className=''></Input>
                        </div>
                        <div>    
                            <LabelStyled className=''>Descripción: </LabelStyled>
                            <Input  type='text' name='descriptionMedicine' id='descriptionMedicine' className=''></Input>
                        </div><br/>
                        <div>    
                            <LabelStyled className=''>Categoria: </LabelStyled>
                            <SelectStyled name='categoryMedicine' id='categoryMedicine' className='' label="Age">
                                <MenuItem value={'Analgésicos'}>Analgésicos</MenuItem>
                                <MenuItem value={'Antiinflamatorios'}>Antiinflamatorios</MenuItem>
                                <MenuItem value={'Mucolíticos'}>Mucolíticos</MenuItem>
                                <MenuItem value={'Antiinfecciosos'}>Antiinfecciosos</MenuItem>
                                <MenuItem value={'Antitusivos'}>Antitusivos</MenuItem>
                                <MenuItem value={'Antiulcerosos'}>Antiulcerosos</MenuItem>
                                <MenuItem value={'Antiácidos'}>Antiácidos</MenuItem>
                                <MenuItem value={'Laxantes'}>Laxantes</MenuItem>
                                <MenuItem value={'Antipiréticos'}>Antipiréticos</MenuItem>
                                <MenuItem value={'Antialérgicos'}>Antialérgicos</MenuItem>
                            </SelectStyled>
                        </div>
                        <div>    
                            <LabelStyled className=''>Cantidad: </LabelStyled>
                            <Input  type='number' name='quantityMedicine' id='quantityMedicine' className=''></Input>
                        </div>
                        <div>    
                            <LabelStyled className=''>Precio: </LabelStyled>
                            <Input  type='number' step="0.01"  name='priceMedicine' id='priceMedicine' className=''></Input>
                        </div>
                        <div>    
                            <LabelStyled className=''>Fecha de elaboración: </LabelStyled>
                            <Input  type='date' name='ElaborationDateMedicine' id='ElaborationDateMedicine' className=''></Input>
                        </div>
                        <div>    
                            <LabelStyled className=''>Fecha de expiracion: </LabelStyled>
                            <Input  type='date' name='ExpirationDateMedicine' id='ExpirationDateMedicine' className=''></Input>
                        </div><br/>
                        <div>   
                            <ButtonStyled variant="contained" color='primary' startIcon={<SaveIcon />}>Guardar</ButtonStyled>
                        </div>
                    </FormControl>
                </Container>
            </Box>
            </ContainerS>
        </Fragment>
        
    )
}
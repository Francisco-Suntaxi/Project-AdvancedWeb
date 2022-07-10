import React, { Fragment }  from 'react'
import {Box, Container, FormControl, FormLabel, Input, Select,MenuItem,Button} from '@mui/material'
import SaveIcon from '@mui/icons-material/Save';


export default function FormAddM(){
    return (
        <Fragment>
            <Box sx={{
                textAlign: 'center'
             }}>
                <Container>
                    <h1>Agregar Medicina</h1>
                    <FormControl>
                        <div>    
                            <FormLabel className=''>Codigo: </FormLabel>
                            <Input  type='number' name='IdMedicine' id='IdMedicine' className=''></Input>
                        </div>
                        <div>    
                            <FormLabel className=''>Medicina: </FormLabel>
                            <Input  type='text' name='nameMedicine' id='nameMedicine' className=''></Input>
                        </div>
                        <div>    
                            <FormLabel className=''>Descripción: </FormLabel>
                            <Input  type='text' name='descriptionMedicine' id='descriptionMedicine' className=''></Input>
                        </div><br/>
                        <div>    
                            <FormLabel className=''>Categoria: </FormLabel>
                            <Select name='categoryMedicine' id='categoryMedicine' className='' label="Age">
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
                            </Select>
                        </div>
                        <div>    
                            <FormLabel className=''>Cantidad: </FormLabel>
                            <Input  type='number' name='quantityMedicine' id='quantityMedicine' className=''></Input>
                        </div>
                        <div>    
                            <FormLabel className=''>Precio: </FormLabel>
                            <Input  type='number' step="0.01"  name='priceMedicine' id='priceMedicine' className=''></Input>
                        </div>
                        <div>    
                            <FormLabel className=''>Fecha de elaboración: </FormLabel>
                            <Input  type='date' name='ElaborationDateMedicine' id='ElaborationDateMedicine' className=''></Input>
                        </div>
                        <div>    
                            <FormLabel className=''>Fecha de expiracion: </FormLabel>
                            <Input  type='date' name='ExpirationDateMedicine' id='ExpirationDateMedicine' className=''></Input>
                        </div><br/>
                        <div>   
                            <Button variant="outlined" color='primary' startIcon={<SaveIcon />}>Guardar</Button>
                        </div>
                    </FormControl>
                </Container>
            </Box>
        </Fragment>
        
    )
}
import React from 'react';
import { Link } from 'react-router-dom';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import { Typography, Button, FormGroup, styled } from '@mui/material';
import { getMedicines, deleteMedicine, deleteExpMedicine} from '../service/api';
import { useState, useEffect, Fragment} from 'react';
import NavBar from './NavBar';
import Footer from './Footer';



const ContainerS = styled(FormGroup)`
    width: 75%;
    display: grid;
    justify-content: center;

    margin: 5% auto 0 auto;
    background-color: white;
    box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
    margin-top: 5%;
    margin-bottom: 5%;
    & > div { 
        margin-top: 5%;   
    }
`;

const Title4 = styled(Typography)`
    text-align: center;
`;

const TableCellStyled = styled(TableCell)`
    text-align: center;
    align-items: center;

`;
const StyleTableRowHead = styled(TableRow)`   
background: #000000;
& > th {
    text-align: center;
    color: #fff;
    font-size: 17px;
}
`

const TableStyled = styled(Table)`
    margin-top: 2%;

`;

const ButtonStyled = styled(Button)`
    margin-left: 10px;
    margin-right: 10px;
    
    min-width: 10%;

`;


export default function Orders() {

    const [medicines, setMedicines]= useState([]);
    const actualDate = new Date();
    const actualMonth = actualDate.getMonth() + 1;
    const actualYear = actualDate.getFullYear();
    const actualDay = actualDate.getDay();

    useEffect(() => {
        getAllMedicines();
    }, []);

    const getAllMedicines = async () => {
        let response = await getMedicines();
        setMedicines(response.data);
    };

    const deleteExpMedicines = async (date) => {
        await deleteExpMedicine(date);
        getAllMedicines();
    };
    const expiredThisMonth =  medicines.filter((object)=> { return (object.expDate.split("-")[1] == actualMonth && object.expDate.split("-")[2] > actualDay)});
    const medicinesExpirated =  medicines.filter((object)=> {return (object.expDate.split("-")[0] <= actualYear && object.expDate.split("-")[1] <= actualMonth && object.expDate.split("-")[2] <= actualDay)});

    return (
        <Fragment>
            <NavBar />

            <ContainerS>
                <Title4 variant="h4">Medicamentos Proximos a Caducar</Title4>
                
                <TableStyled size="small">
                    <TableHead>
                        <StyleTableRowHead>
                            <TableCellStyled>ID</TableCellStyled>
                            <TableCellStyled>Nombre</TableCellStyled>
                            <TableCellStyled>Categoría</TableCellStyled>
                            <TableCellStyled>Descripción</TableCellStyled>
                            <TableCellStyled>Cantidad</TableCellStyled>
                            <TableCellStyled>Precio</TableCellStyled>
                            <TableCellStyled>Fecha Elab.</TableCellStyled>
                            <TableCellStyled>Fecha Expir.</TableCellStyled>
                        </StyleTableRowHead>
                    </TableHead>
                    <TableBody>
                        {  expiredThisMonth.map((medicine) => (
                            <TableRow key={medicine.id}>
                                <TableCellStyled>{medicine.id}</TableCellStyled>
                                <TableCellStyled>{medicine.name}</TableCellStyled>
                                <TableCellStyled>{medicine.category}</TableCellStyled>
                                <TableCellStyled>{medicine.description}</TableCellStyled>
                                <TableCellStyled>{medicine.quantity}</TableCellStyled>
                                <TableCellStyled>{medicine.price}</TableCellStyled>
                                <TableCellStyled>{medicine.elabDate}</TableCellStyled>
                                <TableCellStyled>{medicine.expDate}</TableCellStyled>
    
                            </TableRow>
                        ))}
                    </TableBody>
                </TableStyled>
            </ContainerS>
            <ContainerS>
                <Title4 variant="h4">Medicamentos Caducados</Title4>
                <ButtonStyled variant='contained' onClick={() => deleteExpMedicines()}>Borrar Medicamentos Exp.</ButtonStyled>
                <TableStyled size="small">
                    <TableHead>
                        <StyleTableRowHead>
                            <TableCellStyled>ID</TableCellStyled>
                            <TableCellStyled>Nombre</TableCellStyled>
                            <TableCellStyled>Categoría</TableCellStyled>
                            <TableCellStyled>Descripción</TableCellStyled>
                            <TableCellStyled>Cantidad</TableCellStyled>
                            <TableCellStyled>Precio</TableCellStyled>
                            <TableCellStyled>Fecha Elab.</TableCellStyled>
                            <TableCellStyled>Fecha Expir.</TableCellStyled>
                        </StyleTableRowHead>
                    </TableHead>
                    <TableBody>
                        {medicinesExpirated.map((medicine) => (
                            <TableRow key={medicine.id}>
                                <TableCellStyled>{medicine.id}</TableCellStyled>
                                <TableCellStyled>{medicine.name}</TableCellStyled>
                                <TableCellStyled>{medicine.category}</TableCellStyled>
                                <TableCellStyled>{medicine.description}</TableCellStyled>
                                <TableCellStyled>{medicine.quantity}</TableCellStyled>
                                <TableCellStyled>{medicine.price}</TableCellStyled>
                                <TableCellStyled>{medicine.elabDate}</TableCellStyled>
                                <TableCellStyled>{medicine.expDate}</TableCellStyled>
    
                            </TableRow>
                        ))}
                    </TableBody>
                </TableStyled>
            </ContainerS>
            <Footer/>
        </Fragment>
    );
}

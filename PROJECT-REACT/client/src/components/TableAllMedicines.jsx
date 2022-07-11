import React from 'react';
import Link from '@mui/material/Link';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import { Typography, Button, FormGroup, styled } from '@mui/material';
import NavBar from './NavBar';


// Generate Order Data
function createData(id, name, category, description, quantity, price, elabDate, expDate) {
    const objectMedicine = {
        id: 0,
        name: '',
        description: '',
        category: '',
        quantity: 0,
        price: 0,
        elabDate: '',
        expDate: '',
    };
    objectMedicine.id = id
    objectMedicine.name = name
    objectMedicine.description = description
    objectMedicine.category = category
    objectMedicine.quantity = quantity
    objectMedicine.price = price
    objectMedicine.elabDate = elabDate
    objectMedicine.expDate = expDate
    return objectMedicine;
}

const arrayMedicine = [
    createData(
        1234,
        'Aspirina',
        'Antipiréticos',
        '5 Tabletas',
        10,
        5.44,
        "07-09-2022",
        "07-09-2023",
    ), createData(
        555,
        'Paracetamol',
        'Analgésicos',
        '5 Tabletas',
        15,
        10.44,
        "07-09-2022",
        "07-09-2023",
    ),
    createData(
        222,
        'Ibuprofeno',
        'Analgésicos',
        '6 Tabletas',
        5,
        8.44,
        "07-09-2022",
        "07-09-2023",
    ),
    createData(
        556,
        'Paracetamol',
        'Analgésicos',
        '5 Tabletas',
        15,
        10.44,
        "07-09-2022",
        "07-09-2023",
    ),
    createData(
        123,
        'Omeprazol ',
        'Antiulcerosos',
        '7 Tabletas',
        20,
        6.44,
        "07-09-2022",
        "07-09-2023",
    ),

];

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
    margin-top: 10%;
    & > div { 
        margin-top: 5%;   
    }
`;

const Title4 = styled(Typography)`
    text-align: center;
`;

const TableCellStyled = styled(TableCell)`
    text-align: center;

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

`;


export default function Orders() {
    return (
        <React.Fragment>
            <NavBar />

            <ContainerS>
                <Title4 variant="h4">Medicamentos Registrados</Title4>
                
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
                            <TableCellStyled align="right">Acciones</TableCellStyled>
                        </StyleTableRowHead>
                    </TableHead>
                    <TableBody>
                        {arrayMedicine.map((row) => (
                            <TableRow key = {row.id}>
                                <TableCell>{row.id}</TableCell>
                                <TableCell>{row.name}</TableCell>
                                <TableCell>{row.category}</TableCell>
                                <TableCell>{row.description}</TableCell>
                                <TableCell>{row.quantity}</TableCell>
                                <TableCell>{row.price}</TableCell>
                                <TableCell>{row.elabDate}</TableCell>
                                <TableCell>{row.expDate}</TableCell>
                                <TableCell align="right"><ButtonStyled variant='contained'>Borrar</ButtonStyled><ButtonStyled variant='contained'>Editar</ButtonStyled></TableCell>
                            </TableRow>
                        ))}
                    </TableBody>
                </TableStyled>

                <Link color="primary" href="#"  sx={{ mt: 3 }}>
                    Mirar más.
                </Link>
            </ContainerS>
        </React.Fragment>
    );
}
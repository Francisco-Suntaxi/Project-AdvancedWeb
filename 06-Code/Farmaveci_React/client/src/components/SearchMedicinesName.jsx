
import React, { Fragment } from 'react';
import { styled } from '@mui/material/styles';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell, { tableCellClasses } from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import Box from '@mui/material/Box';
import FormGroup from '@mui/material/FormGroup';
import {Typography,FormLabel,Input,FormControl} from '@mui/material';
import NavBar from './NavBar';
import SearchMedicinesCategory from './SearchMedicinesCategory';

const StyledTableCell = styled(TableCell)(({ theme }) => ({
    [`&.${tableCellClasses.head}`]: {
        backgroundColor: theme.palette.common.black,
        color: theme.palette.common.white,
    },
    [`&.${tableCellClasses.body}`]: {
        fontSize: 20,
    },
}));

const StyledTableRow = styled(TableRow)(({ theme }) => ({
    '&:nth-of-type(odd)': {
        backgroundColor: theme.palette.action.hover,
    },
    // hide last border
    '&:last-child td, &:last-child th': {
        border: 10,
    },
}));

function createData(id, name, category, description, price, quantity, elaborationDate, expirationDate) {
    return { id, name, category, description, price, quantity, elaborationDate, expirationDate };
}

const rows = [
    createData(1, 'Paracetamol', 'alagesico', 'buena', 24, 5, '01/04/2022', '09/05/2022'),
    createData(2, 'Finalin', 'alagesico', 'buena', 40, 5, '01/04/2022', '09/05/2022'),
    createData(3, 'Tempra', 'alagesico', 'buena', 85, 6, '01/04/2022', '09/05/2022'),
    createData(4, 'Aspirina', 'alagesico', 'buena', 24, 8, '01/04/2022', '09/05/2022'),
    createData(5, 'Ramipri', 'alagesico', 'hipertension', 4, 9, '01/04/2022', '09/05/2022'),
]



const StyleTableRowHead = styled(TableRow)`   
background: #000000;
& > th {
    text-align: center;
    color: #fff;
    font-size: 17px;
}
`
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
    & > div { 
        margin-top: 5%;   
    }
`;
const Title4 = styled(Typography)`
    text-align: center;
`;
const LabelStyled = styled(FormLabel)`
    font-weight: bold;

`;

export default function TableMedicines() {
    return (
        <Fragment>
            <NavBar/>
        <ContainerS>
            <Title4 variant="h4">Buscar por Nombre</Title4>
            <Box component="form" ><br></br>
                <FormControl sx={{ width: '15ch' }}>
                    <LabelStyled className=''>Medicina: </LabelStyled>
                    <Input type='text' name='nameMedicine' id='nameMedicine' className=''></Input>
                </FormControl>
            </Box>


            <TableContainer component={Paper}>
                <Table aria-label="customized table">
                    <TableHead>
                        <StyleTableRowHead>
                            <StyledTableCell>Id </StyledTableCell>
                            <StyledTableCell align="right">Name</StyledTableCell>
                            <StyledTableCell align="right">Category</StyledTableCell>
                            <StyledTableCell align="right">Description</StyledTableCell>
                            <StyledTableCell align="right">Price</StyledTableCell>
                            <StyledTableCell align="right">Quantity</StyledTableCell>
                            <StyledTableCell align="right">Elaboration Date</StyledTableCell>
                            <StyledTableCell align="right">Expiration Date</StyledTableCell>

                        </StyleTableRowHead>
                    </TableHead>
                    <TableBody>
                        {rows.map((row) => (
                            <StyledTableRow key={row.name}>
                                <StyledTableCell component="th" scope="row">
                                    {row.id}
                                </StyledTableCell>
                                <StyledTableCell align="right">{row.name}</StyledTableCell>
                                <StyledTableCell align="right">{row.category}</StyledTableCell>
                                <StyledTableCell align="right">{row.description}</StyledTableCell>
                                <StyledTableCell align="right">{row.price}</StyledTableCell>
                                <StyledTableCell align="right">{row.quantity}</StyledTableCell>
                                <StyledTableCell align="right">{row.elaborationDate}</StyledTableCell>
                                <StyledTableCell align="right">{row.expirationDate}</StyledTableCell>
                            </StyledTableRow>
                        ))}
                    </TableBody>
                </Table>
            </TableContainer>
        </ContainerS>
        <SearchMedicinesCategory/>
        </Fragment>

    );

}
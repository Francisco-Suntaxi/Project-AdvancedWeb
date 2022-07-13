import React, { Fragment} from 'react';
import Marquee from "react-fast-marquee";
import Link from '@mui/material/Link';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Title from './Title';

import  Button  from '@mui/material';

// Generate Order Data
function createData(id,name,category,description,quantity,price,elabDate,expDate) {
    this.id = id
    this.name = name
    this.description = description
    this.category = category
    this.quantity = quantity
    this.price = price
    this.elabDate = elabDate
    this.expDate = expDate
}

const rows = [
  createData(
    123,
    'Aspirina',
    'Antipiréticos',
    '5 Tabletas',
    10,
    5.44,
    07-09-2022,
    07-09-2023,
  ),
  createData(
    222,
    'Ibuprofeno',
    'Analgésicos',
    '6 Tabletas',
    5,
    8.44,
    07-09-2022,
    07-09-2023,
  ),
  createData(
    555,
    'Paracetamol',
    'Analgésicos',
    '5 Tabletas',
    15,
    10.44,
    07-09-2022,
    07-09-2023,
  ),
  createData(
    123,
    'Omeprazol ',
    'Antiulcerosos',
    '7 Tabletas',
    20,
    6.44,
    07-09-2022,
    07-09-2023,
  ),
];


export default function Orders() {
  return (
    <React.Fragment>
      <Title>Medicamentos Registrados</Title>
      <Table size="small">
        <TableHead>
          <TableRow>
            <TableCell>ID</TableCell>
            <TableCell>Nombre</TableCell>
            <TableCell>Categoría</TableCell>
            <TableCell>Descripción</TableCell>
            <TableCell>Cantidad</TableCell>
            <TableCell>Precio</TableCell>
            <TableCell>Fecha Elab.</TableCell>
            <TableCell>Fecha Expir.</TableCell>
            <TableCell align="right">Acciones</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {rows.map((row) => (
            <TableRow key={row.id}>
              <TableCell>{row.name}</TableCell>
              <TableCell>{row.category}</TableCell>
              <TableCell>{row.description}</TableCell>
              <TableCell>{row.quantity}</TableCell>
              <TableCell>{row.price}</TableCell>
              <TableCell>{row.elabDate}</TableCell>
              <TableCell>{row.expDate}</TableCell>
              <TableCell align="right"><Button>Borrar</Button><Button>Editar</Button></TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
      <Link color="primary" href="#" onClick={preventDefault} sx={{ mt: 3 }}>
        Mirar más.
      </Link>
    </React.Fragment>
  );
}
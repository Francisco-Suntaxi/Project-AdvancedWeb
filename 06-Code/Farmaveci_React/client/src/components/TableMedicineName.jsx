
import   React ,{Fragment}from 'react';
import { styled } from '@mui/material/styles';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell, { tableCellClasses } from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import FormControl, { useFormControl } from '@mui/material/FormControl';
import OutlinedInput from '@mui/material/OutlinedInput';
import Box from '@mui/material/Box';
import FormHelperText from '@mui/material/FormHelperText'
import Icon from '@mui/material/Icon';

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


function MyFormHelperText() {
  const { focused } = useFormControl() || {};

  const helperText = React.useMemo(() => {
    if (focused) {
      return '';
    }

   
  }, [focused]);

  return <FormHelperText>{helperText}</FormHelperText>;
}


export default function TableMedicines() {
  return (

    <Fragment>
      <Box component="form" noValidate autoComplete="off"><br></br>
        <FormControl sx={{ width: '15ch' }}>
          <OutlinedInput placeholder="Please enter text" />
          <center><Icon>search</Icon></center>
          <MyFormHelperText />
        </FormControl>
      </Box>


      <TableContainer component={Paper}>
        <Table sx={{ minWidth: 500, margin: '7rem', borderRadius: '1rem' }} aria-label="customized table">
          <TableHead>
            <TableRow>
              <StyledTableCell>Id </StyledTableCell>
              <StyledTableCell align="right">Name</StyledTableCell>
              <StyledTableCell align="right">Category</StyledTableCell>
              <StyledTableCell align="right">Description</StyledTableCell>
              <StyledTableCell align="right">Price</StyledTableCell>
              <StyledTableCell align="right">Quantity</StyledTableCell>
              <StyledTableCell align="right">Elaboration Date</StyledTableCell>
              <StyledTableCell align="right">Expiration Date</StyledTableCell>

            </TableRow>
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
    </Fragment>
  );

}


import { AppBar, Toolbar, styled } from '@mui/material'
import { NavLink } from 'react-router-dom';


const Header = styled(AppBar)`background: #111111`;
const Tabs = styled(NavLink)`
font-size: 20px;
margin-right: 5%;
color: inherit;
text-decoration: none;

`;


function NavBar() {
    return (
        <Header position='static'>
            <Toolbar>
                <Tabs to='/'>Salir</Tabs>
                <Tabs to="/all">Tabla de Medicinas</Tabs>
                <Tabs to="/add">Añadir Medicina</Tabs>
                <Tabs to="/findC">Buscar Medicina</Tabs>
            </Toolbar>
        </Header>
    );

};

export default NavBar;
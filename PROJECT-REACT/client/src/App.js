
import Login from './components/Login';
import PageInformation from './components/PageInformation';
import { BrowserRouter, Routes, Route } from 'react-router-dom';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Login />} />
        <Route path="/page" element={<PageInformation />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;

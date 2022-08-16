import { Route, Routes } from 'react-router-dom';
import Header from './components/Header';
import Footer from './components/Footer';
import Autorization from './components/Autorization';
import Front from './components/Front';
import './sass/app.sass';

function App() {
  return (
    <>
      <Header />
      <main>
        <Routes>
          <Route path='/' element={<Front />} />
          <Route path='/autorization' element={<Autorization />} />
        </Routes>
      </main>
      <Footer />
    </>
  );
}

export default App;

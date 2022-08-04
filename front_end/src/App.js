import RegistrationForm from './components/Form';
import { Routes, Route } from 'react-router-dom';
import Bill from './components/Bill';
import Header from './components/Header';
import Footer from './components/Footer';
import './sass/app.sass'

const App = () => {
  return (
    <>
        <Header />
        <main>
          <Routes>
            <Route path='/' element={<RegistrationForm />} />
            <Route path='/form' element={<Bill />} />
          </Routes>
        </main>
        <Footer />
    </>
  );
};

export default App;

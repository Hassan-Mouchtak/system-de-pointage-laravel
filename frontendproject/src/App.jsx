
import './App.css';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Sidebar from './compenent/Sidebar';
import Header from './compenent/Header';
import Footer from './compenent/Footer';
import Generale from './page/Generale';
import Employée from './page/Employée';
import Ajouter from './page/Ajouter';
import Services from './page/Services';
import Projects from './page/Projects';
import Blog from './page/Blog';


function App() {
  return (
 
  
    <BrowserRouter>
    <Header/>
    {/* <Sidebar/> */}


    <Routes>
      <Route path='Generale' element={<Generale/>}/>
      <Route path='Employée' element={<Employée/>} />
      <Route path='Ajouter' element={<Ajouter/>} />
      <Route path='Services' element={<Services/>} />
      <Route path='Projects' element={<Projects/>} />
      <Route path='Blog' element={<Blog/>} />
      


    </Routes>
    <Footer/>
    
    </BrowserRouter>
    
    
    
  );
}

export default App;

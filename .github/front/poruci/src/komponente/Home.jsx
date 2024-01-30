import React from 'react';
import '../Home.css';
import { Link } from 'react-router-dom';



const Home = ({ restorani }) => {
  const kategorije = {
    rostilj: 1,
    poslastice: 2,
    pica: 3,
  };

  return (
    <div className="home-container">
      <div className="image-container">
        <img src="https://res.cloudinary.com/grand-canyon-university/image/fetch/w_750,h_564,c_fill,g_faces,q_auto,f_auto/https://www.gcu.edu/sites/default/files/media/images/Blog/Content%20Campaigns/shutterstock_1383065213.jpg" alt="Food Categories" className='img' />
        <div className="category-overlay">
           <Link to = '/rostilj'>
          <div className="category-text">#rostilj</div>
          </Link>
          <Link to='/poslastice/'>
            <div className="category-text">#poslastice</div>
          </Link>
          <Link to='/pica'>
            <div className="category-text">#pica</div>
          </Link>
          <Link to = '/rostilj'>
          <div className="category-text">#rostilj</div>
          </Link>
          <Link to='/poslastice/'>
            <div className="category-text">#poslastice</div>
          </Link>
          <Link to='/pica'>
            <div className="category-text">#pica</div>
          </Link>
        </div>
      </div>
     
    </div>
  );
};

export default Home;

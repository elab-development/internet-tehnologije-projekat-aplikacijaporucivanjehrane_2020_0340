import React from 'react';
import '../Home.css';
import { Link } from 'react-router-dom';


const Home = () => {
  return (
    <div className="home-container">
      <div className="image-container">
        <img src="https://res.cloudinary.com/grand-canyon-university/image/fetch/w_750,h_564,c_fill,g_faces,q_auto,f_auto/https://www.gcu.edu/sites/default/files/media/images/Blog/Content%20Campaigns/shutterstock_1383065213.jpg" alt="Food Categories" className='img' />
        <div className="category-overlay">
          <div className="category-text">#sushi</div>
          <Link to = '/rostilj'>
          <div className="category-text">#rostilj</div>
          </Link>
          <div className="category-text">#slatko</div>
          <div className="category-text">#sushi</div>
          <div className="category-text">#rostilj</div>
          <div className="category-text">#slatko</div>
        </div>
      </div>
     
    </div>
  );
};

export default Home;

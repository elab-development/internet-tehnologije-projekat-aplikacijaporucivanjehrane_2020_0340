import React from 'react'
import Restoran from './Restoran';
import { useState, useEffect } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';
import ReactPaginate from 'react-paginate';

const kategorije = {
  rostilj: 1,
  poslastice: 2,
  pica: 3,

}





function SviRestorani({ kategorija }) {
  const [currentPage, setCurrentPage] = useState(0);
  const itemsPerPage = 2;
  const [filteredRestaurants, setFilteredRestaurants] = useState([]);

  const [searchTerm, setSearchTerm] = useState("");

    useEffect(() => {

    const fetchData = async () => {
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/restorani-za-kategoriju/${kategorije[kategorija]}`);
        console.log(response.data.podaci);
        
        
        const filtered = response.data?.podaci.filter(
          (restoran) =>
            restoran.naziv &&
            restoran.naziv.toLowerCase().includes(searchTerm.toLowerCase())
        );
      
        setFilteredRestaurants(filtered);
      } catch (error) {
        console.error('Greška pri dohvatanju restorana za kategoriju:', error);
      }
    };

    fetchData();
  }, [kategorija, searchTerm]);
  // const filtriraniRestorani = restorani?.filter(r => r.kategorija_naziv.toLowerCase() === kategorija.toLowerCase());
  // console.log(filtriraniRestorani);


const pageCount = filteredRestaurants
  ? Math.ceil(filteredRestaurants.length / itemsPerPage)
  : 0;

const displayRestaurants = () => {
  if (
    !Array.isArray(filteredRestaurants) ||
    filteredRestaurants.length === 0
  ) {
    return <p>No restaurants to display.</p>;
  }

  const startIndex = currentPage * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  return (
    <div>
      {filteredRestaurants.slice(startIndex, endIndex).map((r) => (
        // <Restoran key={r.id} restoran={r} />
         <Link to={`/proizvodi/${r.id}`} key={r.id}>
         <Restoran restoran={r} />
       </Link>
      ))}
    </div>
  );
};

const handlePageClick = ({ selected }) => {
  setCurrentPage(selected);
};

const handleNextClick = () => {
  setCurrentPage((prevPage) => prevPage + 1);
};

const handlePrevClick = () => {
  setCurrentPage((prevPage) => prevPage - 1);
};

  return (
    
    <div>
      <input
        type="text"
        placeholder="Pronađi restoran (naziv)"
        value={searchTerm}
        onChange={(e) => setSearchTerm(e.target.value)}
        style={{
          margin: "10px",
          padding: "8px",
          width: "30%",
          display: "block",
          margin: "0 auto",
        }}
      />
      {displayRestaurants()}
      
      {/* {restorani?.map((r) => (
        <Link to={`/proizvodi/${r.id}`} key={r.id}>
        <Restoran restoran={r} />
      </Link>
   
        //<Restoran restoran={r} key={r.id} />
      ))}  */}

      {/* Paginacija */}
      <ReactPaginate
  pageCount={pageCount}
  pageRangeDisplayed={3}
  marginPagesDisplayed={1}
  onPageChange={handlePageClick}
  containerClassName={'pagination'}
  activeClassName={'active'}
  previousLabel={<div className="pagination-btn">Prethodna</div>}
  nextLabel={<div className="pagination-btn">Sledeca</div>}
/>
    </div>
  
  
    // <div >
    //     {restorani?.map((r) => (
    //     <Restoran restoran={r} key={r.id} />
    // ))}
    // </div>
  )
}

export default SviRestorani
import React from 'react'
import useScrollNaVrh from "./useScrollNaVrh";
import { BsArrowUpSquareFill } from "react-icons/bs";

function DugmeScrollNaVrh() {
  useScrollNaVrh();
  return (
    <div className="dugme-scroll-na-vrh" onClick={() => window.scrollTo({ top: 0, behavior: "smooth" })}>
      <BsArrowUpSquareFill />
    </div>

  )
}

export default DugmeScrollNaVrh
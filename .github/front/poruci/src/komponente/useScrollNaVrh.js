import { useEffect } from "react";
const useScrollNaVrh = () => {
  useEffect(() => {
    const handleScrollToTop = () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    };
    // Dodajemo event listener za skrolovanje na vrh kada se komponenta montira
    window.addEventListener("scrollToTop", handleScrollToTop);
    // Uklanjamo event listener kada se komponenta demontira
    return () => {
      window.removeEventListener("scrollToTop", handleScrollToTop);
    };
  }, []);
  // Prazan niz znači da će se useEffect izvršiti samo pri montiranju komponente
};
export default useScrollNaVrh;
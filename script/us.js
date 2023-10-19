// Initialization for ES Users
import {
    Datatable,
    initTE,
  } from "tw-elements";
  
  initTE({ Datatable });
  
  const rows = [
    ["Blue Lock", 10, 15, /*... otros valores de años ...*/, 100],
    ["Solo Leveling", /*... valores para Solo Leveling ...*/, 120],
    ["Tower Of God", /*... valores para Tower Of God ...*/, 80],
    // Agrega el resto de las filas con datos aquí ...
  ];
  
  const maxValue = Math.max(...rows.flatMap((row) => row.slice(1))); // Aquí tomamos todos los valores numéricos, no sólo el tercero
  const minValue = Math.min(...rows.flatMap((row) => row.slice(1))); // Aquí también tomamos todos los valores numéricos, no sólo el tercero
  
  const colors = [
    "bg-[#E3F2FD] dark:bg-[#70a4fa]",
    "bg-[#BBDEFB] dark:bg-[#5e93eb]",
    "bg-[#90CAF9] dark:bg-[#4878c7]",
    "bg-[#64B5F6] dark:bg-[#2463c9]",
    "bg-[#42A5F5] dark:bg-[#124fb3]",
  ];
  
  const step = (maxValue - minValue) / (colors.length - 1);
  
  const formatCell = (cell, value) => {
    const colorIndex = Math.floor((value - minValue) / step);
    const colorClass = colors[colorIndex].split(" ");
  
    colorClass.forEach((className) => {
      cell.classList.add(className);
    });
  };
  
  const columns = [
    { label: "Juegos", field: "juegos" },
    { label: "2029", field: "2029", format: formatCell },
    { label: "2030", field: "2030", format: formatCell },
    // ... Agrega las columnas para los otros años aquí ...
    { label: "2040", field: "2040", format: formatCell },
  ];
  
  new Datatable(document.getElementById("datatable"), {
    columns,
    rows,
  });
  
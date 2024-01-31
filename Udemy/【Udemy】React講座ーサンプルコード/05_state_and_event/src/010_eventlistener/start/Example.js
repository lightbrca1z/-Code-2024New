const Example = () => {
  const clickHandler = () => {
    alert('ボタンをクリックされました。');
  }
  return (
    <>
    <button　onClick={clickHandler}>クリックしてね</button>
    <button>クリックしてね</button>
    </>
  );
};

export default Example;


// const Example = () => {
//   const clickHandler = () => {
//     alert('ボタンをクリックされました。');
//   }
//   return (
//     <>
//     <button　onClick={() => {    
// alert('ボタンをクリックされました。');
// }}>クリックしてね</button>
//     <button>クリックしてね</button>
//     </>
//   );
// };
// export default Example;
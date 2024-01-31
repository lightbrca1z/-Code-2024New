const title = 'Expression';
const array = ['item1', 'item2', 'item3'];
const fn = (arg) => {
  return `${arg} Function`;
};
const upperCaseText = 'UpperCaseText';

const Example = () => {
  return (
    <div className="fragment">
      <h3>練習問題</h3>
      <p>
        記述を変更し、完成コードと同じ状態になるようにしてください。コンポーネントの外側（上部）に変数や関数を準備しているためうまく使ってください。※fragmentクラスの付与されたdivタグはfragmentを使用した記法に変更してください。
      </p>
      <h3>Hello JSX</h3>
      {/* toUpperCaseメソッドで文字列をすべて大文字にします。 */}
      <h3>{upperCaseText.toUpperCase()}</h3>
      {/* +演算子で文字列を結合します。 */}
      <h3>{'Hello ' + title}</h3>
      {/* 配列がJSX内で渡されると自動的に要素が展開されて表示されます。 */}
      <h3>{array}</h3>
      {/* 関数の実行はreturnに続く値が返ってきます。 */}
      <h3>{fn('Hello')}</h3>
    </div>
  );
};

export default Example;

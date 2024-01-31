import "./Container.css";

const Container = ({ title, children,first, second}) => {
  return (
    <div className="container">
      <h3>{title}</h3>
      <h1>{children}</h1>
      {second}
      {first}
    </div>
  );
};

export default Container;

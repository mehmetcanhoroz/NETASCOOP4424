import React, { Fragment } from "react";
import { BrowserRouter, Switch, Route } from "react-router-dom";
import './App.css';

import { Header } from "./Components/Shared/Header";
import { Content } from "./Components/Shared/Content";
import { Footer } from "./Components/Shared/Footer";

import Home from "./Routes/Home";

function App() {
  return (
    <Fragment>
      <div className="App">
        <Header />
        <Content>
          <BrowserRouter>
            <Switch>
              <Route exact path="/" component={Home} />
            </Switch>
          </BrowserRouter>
        </Content>
        <Footer />
      </div>
    </Fragment>
  );
}

export default App;

import React, { Fragment } from "react";
import { BrowserRouter, Switch, Route } from "react-router-dom";
import './App.css';

import { Header } from "./Components/Shared/Header";
import { Content } from "./Components/Shared/Content";
import { Footer } from "./Components/Shared/Footer";

import Home from "./Routes/Home";
import Detail from "./Routes/Detail";

function App() {

  return (
    <Fragment>
      <div className="App">
        <BrowserRouter>
          <Header />
          <Content>
            <Switch>
              <Route exact path="/" component={Home} />
              <Route exact path="/movies/:id" component={Detail} />
            </Switch>
          </Content>
          <Footer />
        </BrowserRouter>

      </div>
    </Fragment>
  );
}

export default App;

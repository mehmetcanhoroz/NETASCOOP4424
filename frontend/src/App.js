import React, { Component, Fragment } from "react";
import { Switch, Route } from "react-router-dom";
import './App.css';

//import { Header } from "./Shared/Header";
import { Content } from "./Shared/Content";
//import { Footer } from "./Shared/Footer";

import Home from "./routes/Home";

function App() {
  return (
    <Fragment>
      <div className="App">
        <Content>
        </Content>
        {/*

        
          <Switch>
            <Route exact path="/" component={Home} />
          </Switch>


        <Route component={NotFound} />

this.checkEUPPath() && <Footer />*/}
      </div>
    </Fragment>
  );
}

export default App;

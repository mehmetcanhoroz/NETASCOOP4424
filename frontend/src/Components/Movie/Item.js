import React from 'react';


const Item = () => (
    <div className="col-md-4">
        <div className="card mb-4 box-shadow">
            <img alt="moviecover" className="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/71U%2Bs4SPTuL._SY606_.jpg" data-holder-rendered="true" />
            <div className="card-body">
                <h5 className="card-text">Fast and Furious Tokyo Drift </h5>
                <p className="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div className="d-flex justify-content-between align-items-center">
                    <div className="btn-group">
                        <span className="btn btn-sm btn-outline-secondary">
                            My Score: 10
                        </span>
                    </div>
                    <small className="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
);

export default Item;

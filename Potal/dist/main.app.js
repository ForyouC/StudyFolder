const express = require('express');
const session = require('express-session');
const MySQLStore = require('express-mysql-session')(session);
const bodyParser = require('body-parse');
const pbkdfd2Password = require("pbkdf2-password");
const passport = require('passport');
const LocalStrategy = require('passport-local').Strategy;
const FacebookStrategy = require('passport-facebook').Strategy;
const hasher = pbkdfd2Password();
const mysql = require('mysql');
const conn = mysql.createConnection({
    host : 'localhost',
    user : 'root',
    password : 'sky14985',
    database: 'potal'
});
conn.connect();
var app = express();
app.use(bodyParser.urlencoded({extended:false}));
app.locals.pretty = true;
app.use(session({
    secret : '632!@4dsf#@$435',
    resave : false,
    saveUninitialized: true,
    store:new MySQLStore({
        host : 'localhost',
        port : 3306,
        user : 'root',
        password : 'sky14985',
        database : 'potal'
    })
}));
app.use(passport.initialize());
app.use(passport.session());

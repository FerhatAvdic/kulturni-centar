var express = require('express');

// Get the router
var router = express.Router();

var Show = require('./models/show');

// Middleware for all this routers requests
router.use(function timeLog(req, res, next) {
    console.log('Request Received: ', dateDisplayed(Date.now()));
    next();
});

// Welcome message for a GET at http://localhost:8080/restapi
router.get('/', function (req, res) {
    res.json({ message: 'Welcome to the REST API' });
});

// GET all messages (using a GET at http://localhost:8080/messages)
router.route('/shows')
    .get(function (req, res) {
        Show.find(function (err, shows) {
            if (err)
                res.send(err);
            res.json(shows);
        });
    });
router.route('/projects')
        .post(function (req, res) {
            var project = new Project();

            project.email = req.body.email;
            project.password = req.body.password;
            project.members = req.body.members;
            project.supervisor = req.body.supervisor;
            project.school = req.body.school;
            project.projectInfo = req.body.projectInfo;

            // Save message and check for errors
            project.save(function (err) {
                if (err)
                    res.send(err);
                res.json({ message: 'Project created successfully!' });
            });
        });

// GET message with id (using a GET at http://localhost:8080/messages/:message_id)
router.route('/projects/:project_id')
    .get(function (req, res) {
        Project.findById(req.params.project_id, function (err, project) {
            if (err)
                res.send(err);
            res.json(project);
        });
    })
    .put(function (req, res) {
        Project.findById(req.params.project_id, function (err, project) {
            if (err)
                res.send(err);
            project.email = req.body.email;
            project.password = req.body.password;
            project.members = req.body.members;
            project.supervisor = req.body.supervisor;
            project.school = req.body.school;
            project.projectInfo = req.body.projectInfo;
            project.save(function (err) {
                if (err)
                    res.send(err);
                res.json({ message: 'Project successfully updated!' });
            });

        });
    })
    .delete(function (req, res) {
        Project.remove({
            _id: req.params.project_id
        }, function (err, message) {
            if (err)
                res.send(err);

            res.json({ message: 'Successfully deleted project!' });
        });
    });

router.route('/judges')
    .get(function (req, res) {
        Judge.find(function (err, judges) {
            if (err)
                res.send(err);
            res.json(judges);
        });
    });
router.route('/judges')
        .post(function (req, res) {
            var judge = new Judge();
            judge.email = req.body.email;
            judge.password = req.body.password;
            judge.name = req.body.name;
            judge.surname = req.body.surname;
            judge.phone = req.body.phone;
            judge.gender = req.body.gender;
            judge.profession = req.body.profession;
            judge.company = req.body.company;

            // Save message and check for errors
            judge.save(function (err) {
                if (err)
                    res.send(err);
                res.json({ message: 'Judge created successfully!' });
            });
        });
router.route('/judges/:judge_id')
    .get(function (req, res) {
        Judge.findById(req.params.judge_id, function (err, judge) {
            if (err)
                res.send(err);
            res.json(judge);
        });
    })
    .put(function (req, res) {
        Judge.findById(req.params.judge_id, function (err, judge) {
            if (err)
                res.send(err);
            judge.email = req.body.email;
            judge.password = req.body.password;
            judge.name = req.body.name;
            judge.surname = req.body.surname;
            judge.phone = req.body.phone;
            judge.gender = req.body.gender;
            judge.profession = req.body.profession;
            judge.company = req.body.company;
            judge.save(function (err) {
                if (err)
                    res.send(err);
                res.json({ message: 'Judge successfully updated!' });
            });

        });
    })
    .delete(function (req, res) {
        Judge.remove({
            _id: req.params.judge_id
        }, function (err, message) {
            if (err)
                res.send(err);
            res.json({ message: 'Successfully deleted judge!' });
        });
    });

router.route('/competitions')
    .get(function (req, res) {
        Competition.find(function (err, competitions) {
            if (err)
                res.send(err);
            res.json(competitions);
        });
    });
router.route('/competitions')
        .post(function (req, res) {
            var competition = new Competition();
            competition.title = req.body.title;
            competition.description = req.body.description;
            competition.logo = req.body.logo;
            competition.about = req.body.about;
            competition.partners = req.body.partners;
            competition.comittee = req.body.comittee;
            // Save message and check for errors
            competition.save(function (err) {
                if (err)
                    res.send(err);
                res.json({ message: 'competition created successfully!' });
            });
        });
router.route('/competitions/:competition_id')
    .get(function (req, res) {
        Competition.findById(req.params.competition_id, function (err, competition) {
            if (err)
                res.send(err);
            res.json(competition);
        });
    })
    .put(function (req, res) {
        Competition.findById(req.params.competition_id, function (err, competition) {
            if (err)
                res.send(err);
            competition.title = req.body.title;
            competition.description = req.body.description;
            competition.logo = req.body.logo;
            competition.about = req.body.about;
            competition.partners = req.body.partners;
            competition.comittee = req.body.comittee;
            competition.save(function (err) {
                if (err)
                    res.send(err);
                res.json({ message: 'competition successfully updated!' });
            });

        });
    })
    .delete(function (req, res) {
        Competition.remove({
            _id: req.params.competition_id
        }, function (err, message) {
            if (err)
                res.send(err);
            res.json({ message: 'Successfully deleted competition!' });
        });
    });

module.exports = router;

function dateDisplayed(timestamp) {
    var date = new Date(timestamp);
    return (date.getMonth() + 1 + '/' + date.getDate() + '/' + date.getFullYear() + " " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds());
}

(function () {
  var genrateDate = function (time) {
    var toInt = function (i) {
      return +i;
    };
    var date = (new Date()).toJSON().substr(0, 10).split('-').map(toInt);
    time = time.split(':').map(toInt);
    return new Date(date[0], date[1] - 1, date[2], time[0], time[1], time[2]);
  };
  var data = [{
      name: 'Day 1',
      points: [{
          filled: true,
          img: 'dist/img/schedule/side.png',
          time: genrateDate('13:00:00'),
          speaker: [{
            name: 'InAuguration',
            img: 'dist/img/schedule/side.png',
            job: 'Shiz',
          }],
          desc: 'Le Random Shiz'
        },
        {
          filled: true,
          time: genrateDate('13:00:00'),
          speaker: {
            name: 'Adrian Smith',
            img: 'dist/img/schedule/side.png',
            job: 'IT & Network',
          },
          desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'
        },
        {
          filled: true,
          time: genrateDate('13:30:00'),
          speaker: {
            name: 'Adrian Smith',
            img: 'dist/img/schedule/side.png',
            job: 'IT & Network',
          },
          desc: 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        },
        {
          filled: false,
          time: genrateDate('13:30:00'),
          speaker: {
            name: 'Adrian Smith',
            img: 'dist/img/schedule/side.png',
            job: 'IT & Network',
          },
          desc: 'Sunt in culpa qui officia deserunt mollit anim id est laborum.'
        },
        {
          filled: true,
          time: genrateDate('13:15:00'),
          title: 'Lunch',
          desc: 'Lunch time!'
        },
        {
          filled: true,
          img: 'dist/img/schedule/side.png',
          time: genrateDate('14:00:00'),
          speaker: {
            name: 'Sarah Spencer',
            img: 'dist/img/schedule/side.png',
            job: 'Designer'
          },
          desc: 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          filled: true,
          time: genrateDate('15:00:00'),
          speaker: {
            name: 'Sarah Spencer',
            img: 'dist/img/schedule/side.png',
            job: 'Designer'
          },
          desc: 'Excepteur sint occaecat cupidatat non proident.'
        },
      ]
    },
    {
      name: 'Day 2',
      points: [{
          filled: true,
          img: 'dist/img/schedule/side.png',
          time: genrateDate('13:00:00'),
          speaker: {
            name: 'Emma Henry',
            img: 'dist/img/schedule/side.png',
            job: 'Developer'
          },
          desc: 'Cillum dolore eu fugiat nulla pariatur, excepteur sint occaecat cupidatat.'
        },
        {
          filled: true,
          time: genrateDate('13:30:00'),
          speaker: {
            name: 'Emma Henry',
            img: 'dist/img/schedule/side.png',
            job: 'Developer'
          },
          desc: 'Duis aute irure dolor in reprehenderit in voluptate velit esse.'
        },
        {
          filled: false,
          time: genrateDate('13:30:00'),
          speaker: {
            name: 'Emma Henry',
            img: 'dist/img/schedule/side.png',
            job: 'Developer'
          },
          desc: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          filled: true,
          time: genrateDate('13:00:00'),
          title: 'Lunch',
          desc: 'Lunch time!'
        },
        {
          filled: false,
          time: genrateDate('13:00:00')
        },
        {
          filled: true,
          img: 'dist/img/schedule/side.png',
          time: genrateDate('14:00:00'),
          speaker: {
            name: 'Arthur Reed',
            img: 'dist/img/schedule/side.png',
            job: 'Developer'
          },
          desc: 'Incididunt ut labore et dolore ut enim ad minim veniam.'
        },
        {
          filled: true,
          time: genrateDate('14:30:00'),
          speaker: {
            name: 'Arthur Reed',
            img: 'dist/img/schedule/side.png',
            job: 'Developer'
          },
          desc: 'Aliquip aute irure dolor in reprehenderit in voluptate velit.'
        },
        {
          filled: true,
          time: genrateDate('15:00:00'),
          speaker: {
            name: 'Arthur Reed',
            img: 'dist/img/schedule/side.png',
            job: 'Developer'
          },
          desc: 'Voluptate velit esse cillum dolore eu fugiat.'
        },
      ]
    },
    {
      name: 'Day 4',
      points: [{
        filled: true,
        img: 'dist/img/schedule/side.png',
        time: genrateDate('13:00:00'),
        speaker: [{
          name: 'InAuguration',
          img: 'dist/img/schedule/side.png',
          job: 'Shiz',
        }],
        desc: 'Le Random Shiz'
      }]
    },
    {
      name: 'Day 5',
      points: [{
        filled: true,
        img: 'dist/img/schedule/side.png',
        time: genrateDate('13:00:00'),
        speaker: [{
          name: 'InAuguration',
          img: 'dist/img/schedule/side.png',
          job: 'Shiz',
        }],
        desc: 'Le Random Shiz'
      }]
    }
    ,
    {
      name: 'Day 4',
      points: [{
        filled: true,
        img: 'dist/img/schedule/side.png',
        time: genrateDate('13:00:00'),
        speaker: [{
          name: 'InAuguration',
          img: 'dist/img/schedule/side.png',
          job: 'Shiz',
        }],
        desc: 'Le Random Shiz'
      }]
    }
    ,
    {
      name: 'Day 4',
      points: [{
        filled: true,
        img: 'dist/img/schedule/side.png',
        time: genrateDate('13:00:00'),
        speaker: [{
          name: 'InAuguration',
          img: 'dist/img/schedule/side.png',
          job: 'Shiz',
        }],
        desc: 'Le Random Shiz'
      }]
    }
  ]
  var speakerTmpl =
    '<a href="javascript:void(0)" class="speaker">' +
    '<img src="{img}" alt="">' +
    '<div class="speaker-inner">' +
    '<h3 class="speaker-name">{name}</h3>' +
    '<span class="speaker-job">{job}</span>' +
    '</div>' +
    '</a>';

  var pad = function (num, count) {
    return ((new Array(count + 1)).join('0') + num).slice(count * -1);
  };

  var dateFormat = function (date) {
    return pad(date.getHours(), 2) + ':' + pad(date.getMinutes(), 2);
  };

  var selectPoint = function (pointData, timelineData) {
    // Set point title
    var pointTitleElem = D.id('point-title');
    var title = '';
    if (pointData.title) {
      title += pointData.title + ' at ';
    }
    title += dateFormat(new Date(pointData.time)) + ' - ' + timelineData.name;
    pointTitleElem.textContent = title;

    // Set point description
    D.id('point-desc').textContent = pointData.desc;

    // Set speakers
    var speakersTitleElem = D.id('speakers-title');
    var speakersElem = D.id('speakers');
    D.empty(speakersElem);
    if (pointData.speaker) {
      D.classList.remove(speakersTitleElem, 'hidden');
      D.append(speakersElem, D.compile(speakerTmpl, pointData.speaker));
    } else {
      D.classList.add(speakersTitleElem, 'hidden');
    }
  };

  var timelinzElem = D.id('timeline');
  var timelinz = new Timelinz(data, {
    intervalUnit: 'hour',
    extraIntervals: [0, 0],
    marginBetweenLines: 70,
    intervalFormat: dateFormat,

    onLineRendered: function (lineElem, lineData) {
      // Add timeline title
      var lineTitleElem = D.compile('<h4 class="timelinz__line-title">{name}</h4>', {
        name: lineData.name
      });
      D.prepend(lineElem, lineTitleElem);
    },

    onPointRendered: function (pointElem, pointData, timelineData) {
      // Set tooltip
      var tooltip = dateFormat(new Date(pointData.time));
      if (pointData.title) {
        tooltip += ' - ' + pointData.title;
      } else {
        tooltip += pointData.speaker ? ' - ' + pointData.speaker.name : '';
      }
      D.classList.add(pointElem, 'tooltip-left');
      D.attrs(pointElem, {
        'data-tooltip': tooltip
      });

      // Append <span> to normal points
      if (!pointData.img) {
        D.append(pointElem, document.createElement('span'));
      }
    },

    onPointClicked: function (e, pointData, timelineData) {
      e.preventDefault();
      selectPoint(pointData, timelineData);
    },

    onRenderCompleted: function () {
      // Choose default point
      selectPoint(data[0].points[0], data[0]);
    }
  });
  timelinz.render(timelinzElem);
})();
const week = [
    "Sun",
    "Mon",
    "Tue",
    "Wed",
    "Thurs",
    "Fri",
    "Sat",
  ];
  
  const months = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sept",
    "Oct",
    "Nov",
    "Dec",
  ];
  
  const setTime = () => {
    const day = document.querySelector(".day");
    const month = document.querySelector(".month");
    const dayOfTheMonth = document.querySelector(".day-of-the-month");
  
    const hours = document.querySelector(".hours");
    const minutes = document.querySelector(".minutes");
    const seconds = document.querySelector(".seconds");
  
    const currentDate = new Date();
  
    day.innerText = week[currentDate.getDay()];
    month.innerText = months[currentDate.getMonth()];
    dayOfTheMonth.innerText = currentDate.getDate();
  
    hours.innerText = currentDate.getHours().toString().padStart(2, "0");
    minutes.innerText = currentDate.getMinutes().toString().padStart(2, "0");
    seconds.innerText = currentDate.getSeconds().toString().padStart(2, "0");
  };
  
  setInterval(setTime, 1000);
  
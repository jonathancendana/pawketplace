/* global FullCalendar */

/**
 * --------------------------------------------------------------------------
 * CoreUI Boostrap Admin Template (4.1.1): calendar.js
 * License (https://coreui.io/pro/license)
 * --------------------------------------------------------------------------
 */

document.addEventListener('DOMContentLoaded', () => {
  const calendarEl = document.getElementById('calendar')
  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth'
  })
  calendar.render()
})

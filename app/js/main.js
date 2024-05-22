import { group1, group2, group3 } from './teamData.js';

const renderTeam = (group, containerSelector) => {
    const container = document.querySelector(containerSelector);

    group.forEach(teamMember => {
        const teamCard = document.createElement('div');
        teamCard.classList.add('row', 'team-card');

        teamCard.innerHTML = `
        <div class="col">
            <img src="${teamMember.dataImg}" alt="">
        </div>
        <div class="col">
            <strong>${teamMember.dataName}</strong>
            <small>${teamMember.dataJob}</small>
        </div>`;

        container.appendChild(teamCard);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    renderTeam(group1, '.team-avatar1');
    renderTeam(group2, '.team-avatar2');
    renderTeam(group3, '.team-avatar3');
});
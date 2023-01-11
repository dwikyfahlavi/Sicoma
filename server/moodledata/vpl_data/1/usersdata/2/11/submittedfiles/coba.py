import pygame

# Initialize Pygame
pygame.init()

# Set the window size and background color
window_size = (800, 600)
bg_color = (255, 255, 255)

# Create a Pygame window
screen = pygame.display.set_mode(window_size)

# Fill the background with the background color
screen.fill(bg_color)

# Set the star color and size
star_color = (255, 0, 0)
star_size = 50

# Calculate the center of the window
center_x = window_size[0] / 2
center_y = window_size[1] / 2

# Draw the star
pygame.draw.polygon(screen, star_color, [
    (center_x, center_y - star_size),
    (center_x + star_size / 2, center_y - star_size / 2),
    (center_x + star_size, center_y),
    (center_x + star_size / 2, center_y + star_size / 2),
    (center_x, center_y + star)])

pygame.display.flip()

# Run the Pygame loop
running = True
while running:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

# Quit Pygame
pygame.quit()